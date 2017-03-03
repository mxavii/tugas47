
CREATE TABLE IF NOT EXISTS `mobil` (
  `nopol` varchar(11) NOT NULL DEFAULT '',
  `merk` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `kubikasi` varchar(255) NOT NULL,
  `tahun_perakitan` varchar(100) NOT NULL,
  PRIMARY KEY (`nopol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mobil` (`nopol`, `merk`, `warna`, `kubikasi`, `tahun_perakitan`) VALUES
('AD1234CD', 'Hyundai', 'merah', '1200', '2008'),
('AE4444NG', 'Peugot', 'putih', '1425', '2006'),
('AG4444PA', 'Suzuki', 'hitam', '1610', '2002'),
('K4484RR', 'Honda', 'kuning', '2530', '2012'),
('H3884TT', 'Toyota', 'merah', '1900', '2011');
